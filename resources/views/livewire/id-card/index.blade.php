<div>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Thai Nation ID') }}
        </h2>
    </x-slot>
    <div>
        @if (session()->has('success'))

            <div class="row mt-3 justify-content-center">
                <div class="alert alert-success alert-dismissible fade show col-md-4 col-md-offset-4" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>

        @endif
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a class="btn btn-primary m-3" href="{!! route('idc.create') !!}">create</a>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Identification Number</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">name</th>
                            <th scope="col">วันเกิด</th>
                            <th scope="col">ศาสนา</th>
                            <th scope="col">ที่อยู่</th>
                            <th scope="col">วันออกบัตร</th>
                            <th scope="col">วันหมดอายุ</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($idcard as $item)
                            <tr>
                                <th scope="row">{!! $i++ !!}</th>
                                <td>{!! $item->idc_number !!}</td>
                                <td>{!! $item->th_full_name !!}</td>
                                <td>{!! $item->en_full_name !!}</td>
                                <td>{!! \Carbon\Carbon::parse($item->birth_date)->format('d/m/Y')  !!}</td>
                                <td>{!! $item->religion  !!}</td>
                                <td>{!! $item->full_address  !!}</td>
                                <td>{!! \Carbon\Carbon::parse($item->issue_date)->format('d/m/Y')  !!}</td>
                                <td>{!! \Carbon\Carbon::parse($item->expired_date)->format('d/m/Y')  !!}</td>
                                <td>

                                    <div class="dropdown">
                                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                           id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Action
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="{!! route('idc.edit',$item) !!}">Edit</a>
                                            </li>
                                            <li><livewire:id-card.delete-idc :idc="$item"></livewire:id-card.delete-idc></li>
                                        </ul>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
{{--                        {!! $idcard->links() !!}--}}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@push('after-scripts')
        <script>
            window.addEventListener('deleted', event => {
                alert('Deleted successfully.');
                window.location.href='{!! route('idc.index') !!}';
            })
        </script>
@endpush
</div>
