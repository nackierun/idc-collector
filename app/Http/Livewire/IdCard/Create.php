<?php

namespace App\Http\Livewire\IdCard;

use App\Models\IdCard;
use App\View\Components\DefaultLayout;
use Livewire\Component;

class Create extends Component
{
    public $idc_number;
    public $th_title_name;
    public $en_title_name;
    public $th_first_name;
    public $th_last_name;
    public $en_first_name;
    public $en_last_name;
    public $birth_date;
    public $religion;
    public $building_no;
    public $sub_district;
    public $district;
    public $province;
    public $issue_date;
    public $expire_date;

    protected $rules = [
        'idc_number' => 'required|numeric|digits_between :13,13|unique:App\Models\IdCard,idc_number',
        'th_title_name' => 'required',
        'th_first_name' => 'required',
        'th_last_name' => 'required',
        'en_title_name' => 'required',
        'en_first_name' => 'required',
        'en_last_name' => 'required',
        'birth_date' => 'required|date_format:Y-m-d',
        'religion' => 'required',
        'building_no' => 'required',
        'sub_district' => 'required',
        'district' => 'required',
        'province' => 'required',
        'issue_date' => 'required|date_format:Y-m-d',
        'expire_date' => 'required|date_format:Y-m-d',
    ];

    protected $messages = [
        'idc_number.required' => 'กรุณากรอกเลขบัตรประจำตัวประชาชน',
        'idc_number.digits_between' => 'เลขบัตรประจำตัวประชาชนจะต้องมี 13 หลัก',
        'idc_number.numeric' => 'เลขบัตรประจำตัวประชาชนจะต้องเป็นตัวเลข',
        'idc_number.unique' => 'เลขบัตรประจำตัวประชาชนนี้มีในระบบอยู่แล้ว',
        'th_title_name.required' => 'กรุณากรอก คำนำหน้า',
        'th_first_name.required' => 'กรุณากรอก ชื่อ',
        'th_last_name.required' => 'กรุณากรอก นามสกุล',
        'en_title_name.required' => 'กรุณากรอก Title',
        'en_first_name.required' => 'กรุณากรอก First Name',
        'en_last_name.required' => 'กรุณากรอก Last Name',
        'birth_date.required' => 'กรุณากรอก วันเกิด',
        'birth_date.date_format' => 'วันที่ไม่ถูกต้อง',
        'religion.required' => 'กรุณากรอก ศาสนา',
        'building_no.required' => 'กรุณากรอก บ้านเลขที่/หมู่',
        'sub_district.required' => 'กรุณากรอก แขวง/ตำบล',
        'district.required' => 'กรุณากรอก เขต/อำเภอ',
        'province.required' => 'กรุณากรอก จังหวัด',
        'issue_date.required' => 'กรุณากรอก วันออกบัตร',
        'issue_date.date_format' => 'วันที่ไม่ถูกต้อง',
        'expire_date.required' => 'กรุณากรอก วันบัตรหมดอายุ',
        'expire_date.date_format' => 'วันที่ไม่ถูกต้อง',
    ];

//    protected $validationAttributes = [
//        'idc_number' => 'เลขบัตรประจำตัวประชาชน'
//    ];

    public function render()
    {
        return view('livewire.id-card.create')->layout(DefaultLayout::class);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        $saved = IdCard::query()->create($validatedData);
        if ($saved) {
            session()->flash('success', 'บันทึกสำเร็จ');
            $this->redirect(route('idc.index'));
        }
    }
}
