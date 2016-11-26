<div class="row" style="margin-bottom: 15px">
    <div class="col-xs-4 col-sm-4">
        <a href="/publications/add" class="btn btn-primary col-xs-12">Crear nueva publicación</a>
    </div>
    <div class="col-xs-8 col-sm-8 searcher">
        <form id="searcher" action="/searchInMyPublications" method="GET">
            <div class="input-group">
                {{ csrf_field() }}
                <input type="text" class="form-control box-shadow" name="query">
                <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </span>
            </div>
        </form>

    </div>
</div>