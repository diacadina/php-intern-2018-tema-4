@extends('layout.mainlayout')

@section("body")
    <div class="container">
        <p>Angajati</p>
        <table class="table" id="employeesTable">
            <thead>
                <tr>
                    <th>Name</th>
                </tr>
            </thead>
        </table>

    <button class="btn btn-primary" id="BtnAdd">Add</button>
    </div>



    <script>
            function deleteName(id) {
                alert(id);
            }

        $(document).ready( function () {
            $('#employeesTable').DataTable({
                "ajax": 'http://lumen.local/employees',
                "columns": [{
                    data: "name",
                    render: function (data, type, full, meta)
                    {
                        console.log(full);
                        return data+' <button class="btn btn-primary" style="float:right;"id="edit-'+full.id+'">Add</button><button class="btn btn-primary" style="float:right;"onclick="deleteName('+full.id+')">Delete</button>';
                    }
                }]
            });

            $("#BtnAdd").click( function()
            {
                var person = prompt("Please enter a name:", "");
                if (person != null && person != "")
                {
                    $.post( "http://lumen.local/employees", { name: person }, function( data ) {
                        location.reload();
                    });
                }
            });
        });
    </script>
@endsection
