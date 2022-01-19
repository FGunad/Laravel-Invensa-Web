<form action="?" class="form-inline float-right" method="get">
    <div class="input-group input-group-sm">
        <input name="keyWord" type="text" class="form-control" placeholder="Cari..." value="{{ request()->keyWord }}"/>
        <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>
