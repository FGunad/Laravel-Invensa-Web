@if (session('success') == 'store')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Add Success</strong> data saved successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('success') == 'add')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Add Success</strong> data saved successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('success') == 'destroy')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Delete Success</strong> data berhasil di delete.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
