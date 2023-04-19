@props(['headers' => ['#'], 'data' => null])

<div>
    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover" id="dashboard_data-table">
            <thead>
                <tr>
                    @foreach ($headers as $header)
                        <th class="border-gray-200">{{ $header }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody id="dashboard_table-body">

                @if ($data !== null)
                <script>
                    verifyDataTable()
                </script>
                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($data as $row)
                        <tr id="{{ $row['id'] }}">
                            <td>
                                {{ $counter }}
                            </td>
                            @foreach (array_slice($row, 1) as $element)
                                <td>
                                    {{ $element }}
                                </td>
                            @endforeach
                        </tr>
                        @php
                            $counter++;
                        @endphp
                    @endforeach
                    <script>
                        verifyDataTable()
                        createDataTable()
                    </script>
                @endif

            </tbody>
        </table>
    </div>
</div>

