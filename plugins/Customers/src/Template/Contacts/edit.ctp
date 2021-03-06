<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title"><?= __('Editar Contacto') ?></h4>
</div>
<?= $this->Form->create($contact, [
    'url' => "/customers/contacts/edit/{$contact->id}/{$contact->customer_id}",
    'class' => 'form-horizontal',
    'id' => 'contacts-form',
    'data-parsley-validate',
]) ?>
    <?= $this->element('Customers.Contacts/form'); ?>
<?= $this->Form->end() ?>
<script type="text/javascript">
    $('#contacts-form').parsley();
</script>