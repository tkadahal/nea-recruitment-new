@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header"><i class="fa fa-align-justify"></i>
            <strong>Language </strong> Content
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover datatable">
                    <thead>
                        <tr>
                            <th>Key</th>
                            <th>Translation</th>
                            <th>Action</th> <!-- Add an action column -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($languageContent as $key => $translation)
                            <tr>
                                <td>{{ $key }}</td>
                                <td>
                                    @if (is_string($translation))
                                        <input type="text" class="form-control editable-field" value="{{ $translation }}">
                                    @else
                                        <table>
                                            @foreach ($translation as $subKey => $subTranslation)
                                                <tr>
                                                    <td>{{ $subKey }}</td>
                                                    <td>
                                                        @if (is_string($subTranslation))
                                                            <input type="text" class="form-control editable-field"
                                                                value="{{ $subTranslation }}">
                                                        @else
                                                            <table>
                                                                @foreach ($subTranslation as $subSubKey => $subSubTranslation)
                                                                    <tr>
                                                                        <td>{{ $subSubKey }}</td>
                                                                        <td>
                                                                            @if (is_string($subSubTranslation))
                                                                                <input type="text"
                                                                                    class="form-control editable-field"
                                                                                    value="{{ $subSubTranslation }}">
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </table>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-info update-button">Update</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.update-button').click(function() {
                var $row = $(this).closest('tr');
                var translationKey = $row.find('td:first-child').text();
                var subKey = $row.find('td:nth-child(2)').text();
                var subSubKey = $row.find('td:nth-child(3)').text();
                var updatedValue = $row.find('.editable-field').val();

                // Send the updated value to the server using an AJAX call
                $.ajax({
                    method: 'POST',
                    url: '{{ route('admin.language.update') }}',
                    data: {
                        _token: '{{ csrf_token() }}',
                        translationKey: translationKey,
                        subKey: subKey,
                        subSubKey: subSubKey,
                        updatedValue: updatedValue
                    },
                    success: function(response) {
                        alert(response.message);
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred while updating the translation.');
                    }
                });
            });
        });
    </script>
@endsection
