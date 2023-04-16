<div>
    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover" id="dashboard_data-table">
            <thead>
                <tr>
                    @foreach ($headers as $header)
                        <th class="border-gray-200">{{$header}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody id="dashboard_table-body">

            </tbody>
        </table>
    </div>
</div>
