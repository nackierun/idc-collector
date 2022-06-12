<?php

namespace App\Http\Livewire\IdCard;

use App\Models\IdCard;
use App\View\Components\DefaultLayout;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component
{

    public $idc_id;
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

    public function mount(IdCard $id)
    {
        $this->idc_id = $id->id;
        $this->idc_number = $id->idc_number;
        $this->th_title_name = $id->th_title_name;
        $this->th_first_name = $id->th_first_name;
        $this->th_last_name = $id->th_last_name;
        $this->en_title_name = $id->en_title_name;
        $this->en_first_name = $id->en_first_name;
        $this->en_last_name = $id->en_last_name;
        $this->birth_date = $id->birth_date;
        $this->religion = $id->religion;
        $this->building_no = $id->building_no;
        $this->sub_district = $id->sub_district;
        $this->district = $id->district;
        $this->province = $id->province;
        $this->issue_date = $id->issue_date;
        $this->expire_date = $id->expire_date;

    }

    public function render()
    {

        return view('livewire.id-card.edit')->layout(DefaultLayout::class);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'idc_number' =>
                ['required', 'numeric', 'digits_between :13,13',
                    Rule::unique('idcard', 'idc_number')->ignore($this->idc_id)
                ],
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
        ]);
    }

    public function edit()
    {
        $validatedData = $this->validate([
            'idc_number' =>
                ['required', 'numeric', 'digits_between :13,13',
                    Rule::unique('idcard', 'idc_number')->ignore($this->idc_id)
                ],
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
        ]);

        $saved = IdCard::query()->where('id',$this->idc_id)->update($validatedData);
        if ($saved) {
            session()->flash('success', 'บันทึกสำเร็จ');
            $this->redirect(route('idc.index'));
        }
    }

}
