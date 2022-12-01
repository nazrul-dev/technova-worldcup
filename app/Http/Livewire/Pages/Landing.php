<?php

namespace App\Http\Livewire\Pages;

use App\Models\Participant;
use App\Models\Teams;
use Livewire\Component;

class Landing extends Component
{
    public $teamSelected = null;
    public $flag = 'https://upload.wikimedia.organization/wikipedia/commons/2/2f/Missing_flag.png';
    public $term = false;
    public $modalSubmit = false;
    public $organization, $name, $phone, $email;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|unique:participants,email',
        'organization' => 'required',
        'phone' => 'required|numeric',
    ];

    // public function updatedTerm($value){
    //     $this->term = $value;

    // }
    public function handleModalSubmit()
    {
        $this->modalSubmit = !$this->modalSubmit;
        $this->reset('email','phone','name', 'organization');
    }
    public function updatedTeamSelected($value)
    {
        $team = Teams::where('value', $value)->first();
        $this->flag = $team->flag;
    }
    public function render()
    {
        $teams = Teams::get();
        return view('livewire.pages.landing', compact('teams'));
    }

    public function submit()
    {
        $this->modalSubmit = true;
    }

    public function store()
    {
        $this->validate();
        try {
            Participant::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'organization' => $this->organization,
                'prediction' => $this->teamSelected,
            ]);
            $this->reset();
            $this->flag = 'https://upload.wikimedia.organization/wikipedia/commons/2/2f/Missing_flag.png';
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
