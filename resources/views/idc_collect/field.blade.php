<div>
    <div class="row p-3">
        <div class="mb-3 col-md-12">
            <label for="idc_num" class="form-label">
                Identification Number/เลขบัตรประจำตัวประชาชน 13 หลัก
            </label>
            <input wire:model="idc_num" id="idc_num" name="idc_num" type="text" value="" class="form-control"
                   placeholder="" required>

        </div>
        <div class="mb-3 col-md-6">
            <label for="th_first_name" class="form-label">
                ชื่อตัว
            </label>
            <input wire:model="th_first_name" id="th_first_name" name="th_first_name" type="text" value="" class="form-control" placeholder="" required>

        </div>
        <div class="mb-3 col-md-6">
            <label for="th_last_name" class="form-label">
                นามสกุล
            </label>
            <input id="th_last_name" name="th_last_name" type="text" value="" class="form-control" placeholder="" required>

        </div>
        <div class="mb-3 col-md-6">
            <label for="en_first_name" class="form-label">
                First Name
            </label>
            <input id="en_first_name" name="en_first_name" type="text" value="" class="form-control" placeholder="" required>

        </div>
        <div class="mb-3 col-md-6">
            <label for="en_last_name" class="form-label">
                Last Name
            </label>
            <input id="en_last_name" name="en_last_name" type="text" value="" class="form-control" placeholder="" required>

        </div>
        <div class="mb-3 col-md-6">
            <label for="birth_date" class="form-label">
                วันเกิด
            </label>
            <input id="birth_date" name="birth_date" type="date" value="" class="form-control" placeholder="" required>

        </div>
        <div class="mb-3 col-md-6">
            <label for="religion" class="form-label">
                ศาสนา
            </label>
            <input id="religion" name="religion" type="text" value="" class="form-control" placeholder="" required>

        </div>
        <div class="mb-3 col-md-3">
            <label for="building_no" class="form-label">
                บ้านเลขที่/หมู่
            </label>
            <input id="building_no" name="building_no" type="text" value="" class="form-control" placeholder="" required>

        </div>
        <div class="mb-3 col-md-3">
            <label for="sub_district" class="form-label">
                แขวง/ตำบล
            </label>
            <input id="sub_district" name="sub_district" type="text" value="" class="form-control" placeholder="" required>

        </div>
        <div class="mb-3 col-md-3">
            <label for="district" class="form-label">
                เขต/อำเภอ
            </label>
            <input id="district" name="district" type="text" value="" class="form-control" placeholder="" required>

        </div>
        <div class="mb-3 col-md-3">
            <label for="province" class="form-label">
                จังหวัด
            </label>
            <input id="province" name="province" type="text" value="" class="form-control" placeholder="" required>

        </div>
        <div class="mb-3 col-md-3">
            <label for="issue_date" class="form-label">
                วันออกบัตร
            </label>
            <input id="issue_date" name="issue_date" type="date" value="" class="form-control" placeholder="" required>

        </div>
        <div class="mb-3 col-md-3">
            <label for="expire_date" class="form-label">
                วันบัตรหมดอายุ
            </label>
            <input id="expire_date" name="expire_date" type="date" value="" class="form-control" placeholder="" required>

        </div>
        <div class="mb-3 col-12 mt-3 text-center">
            <button type="submit" class="btn btn-primary">save</button>
            <a class="btn btn-dark" href="{!! route('idc.index') !!}">back</a>
        </div>
    </div>

</div>

