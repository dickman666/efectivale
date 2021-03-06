<?php
namespace App\Controller;

use App\Controller\AppController;

use Cake\View\CellTrait; // En funcion con PDF CELL
use Cake\Mailer\Email;

/**
 * Demos Controller
 *
 * @property \App\Model\Table\DemosTable $Demos
 */
class DemosController extends AppController
{

    use CellTrait; // En funcion con PDF CELL

public $components = ['Usermgmt.Search'];
    /**
     * This controller uses following default pagination values
     *
     * @var array
     */
    public $paginate = [
        'limit'=>50
    ];
    /**
     * This controller uses search filters in following functions for ex index, online function
     *
     * @var array
     */
    public $searchFields = [
        'excel'=>[
            'Poblacionmx'=>[
                'Poblacionmx'=>[
                    'type'=>'text',
                    'label'=>'Buscar',
                    'tagline'=>'Buscar por estado, año',
                    'condition'=>'multiple',
                    'searchFields'=>['Poblacionmx.estado', 'Poblacionmx.year'],
                    'inputOptions'=>['style'=>'width:200px;']
                ]
            ]
        ]
    ];

    public function index(){
        return $this->redirect('/');
    }

    public function excel(){
        $this->loadModel('Poblacionmx');

        $this->Search->applySearch();
        $this->set('registros', $this->paginate($this->Poblacionmx));
        $this->set('_serialize', ['registros']);

        if($this->request->is('ajax')) {
            //$this->layout = 'ajax';
            $this->viewBuilder()->layout('ajax');
            $this->render('/Element/poblacionmx');
        }

        
    }

    public function pdf(){


    	
    	$pdf = new \HTML2PDF('P','LETTER','es');
        ob_start();
      
        include(ROOT. DS.'vendor'.DS.'spipu'.DS.'html2pdf'.DS.'examples'.DS.'res'.DS. 'exemple05.php');
        $content = ob_get_clean();

       

       $pdf->WriteHTML($content);
        $filename="PdfDemo";
        //echo WWW_ROOT.'/'.$filename.'.pdf';

        if(file_exists(WWW_ROOT.'/'.$filename.'.pdf') )
            unlink(WWW_ROOT.'/'.$filename.'.pdf');

        $pdf->Output(WWW_ROOT.'/'.$filename.'.pdf','F');


        $this->set(compact( 'filename', $filename ));


    }

    public function pdfCell(){

        ob_start();
        
        $html2pdf = new \HTML2PDF('P','LETTER','es');

        $content = ob_get_clean();

        $opcional = 'PDF CELL';
        $body = $this->cell('Pdf::pdf_cell', ['opcional' => $opcional]);

        $html2pdf->WriteHTML($body);
            
        $pdf = $html2pdf->Output('resultado_pdf_cell.pdf', FALSE); // FALSE o TRUE

        $html2pdf->Output(WWW_ROOT.'/files/resultado_pdf_cell.pdf', 'F'); // GUARDA ARCHIVO LOCAL

    }

    public function graficasImg(){

        ob_start();
        include(APP.'Template/Cell/Pdf/graficas_img.ctp');

    }

    // Crear una funcion para generar XML

    // Crear una funcion para generar ZIP

    public function correo(){

        $email = new Email('');

        $email->transport('ews');

        $email->template("default")
            ->emailFormat("html")
            ->to('francisco.carrizales@webpoint.mx')
            ->viewVars(['content' => "hola mundo ". time()])
            ->from('app@domain.com') ;
            // Agregar prueba de archivos adjuntos
            // ->send();


    }

    public function report($type = 1){

        $this->loadModel('Evaluations');

        $evaluations_type = $this->Evaluations->EvaluationTypes->find('all', ['conditions'=>['EvaluationTypes.id'=>$type]])->first();
        //debug($evaluations_type->name); die;

        $evaluations = $this->Evaluations->find('all', [
            'conditions' => [
                'Evaluations.id >' => 27,
                'Evaluations.evaluation_type_id' => $type
            ],
            'contain' => [
                'Customers',
                'EvaluationTypes',
                'Users',
                'EvaluationAnswers' => [
                    'EvaluationQuestions',
                    'EvaluationQuestionOptions'
                ]
            ]
        ])->toArray();

        $this->loadModel('EvaluationQuestions');
        $questions = $this->EvaluationQuestions->find('all',[
                'conditions' => ['EvaluationQuestions.evaluation_type_id' => $type],
                'order' => ['EvaluationQuestions.order' => 'ASC']
            ])->toArray();


        $data = [];

        foreach ($evaluations as $e => $evaluation) {

            $data[$e] = [
                'ejecutivo' => $evaluation->user->first_name.' '.$evaluation->user->last_name.' '.$evaluation->user->clast_name,
                'customer' => $evaluation->customer->business_name,
                'created' => $evaluation->created->format('Y-m-d H:m'),
                'answers' => []
            ];

            foreach ($questions as $q => $question) {

                $empty = true;

                foreach ($evaluation->evaluation_answers as $answer) {
                    if($question->id == $answer->evaluation_question_id){
                        $data[$e]['answers'][] = $answer;
                        $empty = false;
                    }
                }

                if($empty == true){
                    $data[$e]['answers'][] = null;
                }

            }

        }//debug($dataQuestions); die;
        
       $this->set(compact('questions', 'data', 'evaluations_type'));

    }

}
