<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Thai Nation ID') }}
        </h2>
    </x-slot>
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card mt-5 mb-5">
                    <div class="card-body">

                        <form wire:submit.prevent="edit">
                            @csrf
                            <div>
                                <div class="row p-3">

                                    <div class="mb-3 col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                Preview
                                            </div>
                                            <div class="card-body mw-50 mh-50">
                                                @if ($photo)
                                                    @if(!is_string($photo))
                                                        <img src="{!! $photo->temporaryUrl() !!}" alt="photo"
                                                             class="card-img-top">
                                                    @else
                                                        <img src="data:image/png;base64,{!! $photo !!}" alt="photo"
                                                             class="card-img-top">

                                                    @endif
                                                @else
                                                    <img
                                                        src="{!! asset('avatar/blank-profile-picture-973460_640.png') !!}"
                                                        alt="photo" class="card-img-top">

                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 col-md-9">
                                        <label for="photo" class="form-label">
                                            Photo
                                        </label>
                                        <input wire:model="photo" id="photo" name="photo" type="file"
                                               accept=".jpg, .jpeg, .png" value=""
                                               class="form-control @error('photo') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('photo')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror

                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label for="idc_number" class="form-label">
                                            Identification Number/เลขบัตรประจำตัวประชาชน 13 หลัก
                                        </label>
                                        <input wire:model="idc_number" id="idc_number" name="idc_number" type="text"
                                               value=""
                                               class="form-control @error('idc_number') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('idc_number')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror

                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="th_title_name" class="form-label">
                                            คำนำหน้า
                                        </label>
                                        <input wire:model="th_title_name" id="th_title_name" name="th_title_name"
                                               type="text" value=""
                                               class="form-control @error('th_title_name') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('th_title_name')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="th_first_name" class="form-label">
                                            ชื่อตัว
                                        </label>
                                        <input wire:model="th_first_name" id="th_first_name" name="th_first_name"
                                               type="text" value=""
                                               class="form-control @error('th_first_name') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('th_first_name')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="th_last_name" class="form-label">
                                            นามสกุล
                                        </label>
                                        <input wire:model="th_last_name" id="th_last_name" name="th_last_name"
                                               type="text" value=""
                                               class="form-control @error('th_last_name') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('th_last_name')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="en_title_name" class="form-label">
                                            Title
                                        </label>
                                        <input wire:model="en_title_name" id="en_title_name" name="en_title_name"
                                               type="text" value=""
                                               class="form-control @error('en_title_name') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('en_title_name')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="en_first_name" class="form-label">
                                            First Name
                                        </label>
                                        <input wire:model="en_first_name" id="en_first_name" name="en_first_name"
                                               type="text" value=""
                                               class="form-control @error('en_first_name') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('en_first_name')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="en_last_name" class="form-label">
                                            Last Name
                                        </label>
                                        <input wire:model="en_last_name" id="en_last_name" name="en_last_name"
                                               type="text" value=""
                                               class="form-control @error('en_last_name') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('en_last_name')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="birth_date" class="form-label">
                                            วันเกิด
                                        </label>
                                        <input wire:model="birth_date" id="birth_date" name="birth_date" type="date"
                                               value="" class="form-control @error('birth_date') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('birth_date')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="religion" class="form-label">
                                            ศาสนา
                                        </label>
                                        <input wire:model="religion" id="religion" name="religion" type="text" value=""
                                               class="form-control @error('religion') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('religion')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label for="building_no" class="form-label">
                                            บ้านเลขที่/หมู่
                                        </label>
                                        <input wire:model="building_no" id="building_no" name="building_no" type="text"
                                               value="" class="form-control @error('building_no') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('building_no')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label for="sub_district" class="form-label">
                                            แขวง/ตำบล
                                        </label>
                                        <input wire:model="sub_district" id="sub_district" name="sub_district"
                                               type="text" value=""
                                               class="form-control @error('sub_district') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('sub_district')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label for="district" class="form-label">
                                            เขต/อำเภอ
                                        </label>
                                        <input wire:model="district" id="district" name="district" type="text" value=""
                                               class="form-control @error('district') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('district')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label for="province" class="form-label">
                                            จังหวัด
                                        </label>
                                        <input wire:model="province" id="province" name="province" type="text" value=""
                                               class="form-control @error('province') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('province')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label for="issue_date" class="form-label">
                                            วันออกบัตร
                                        </label>
                                        <input wire:model="issue_date" id="issue_date" name="issue_date" type="date"
                                               value="" class="form-control @error('issue_date') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('issue_date')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label for="expire_date" class="form-label">
                                            วันบัตรหมดอายุ
                                        </label>
                                        <input wire:model="expire_date" id="expire_date" name="expire_date" type="date"
                                               value="" class="form-control @error('expire_date') is-invalid @enderror"
                                               placeholder="" required>
                                        @error('expire_date')
                                        <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                    <div class="mb-3 col-12 mt-3 text-center">
                                        <button type="submit" class="btn btn-primary">save</button>
                                        <a class="btn btn-dark" href="{!! route('idc.index') !!}">back</a>
                                    </div>
                                </div>

                            </div>


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
