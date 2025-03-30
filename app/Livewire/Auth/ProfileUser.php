<?php
namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ProfileUser extends Component
{
    public $user;
    public $name;
    public $email;
    public $id; // Khai báo thuộc tính

    #[Layout('components.layouts.master')]
    public function mount($id)
    {
        if (!$this->id) {
            abort(404, 'Thiếu ID user');
        }

        $this->user = User::find($this->id);

        if (!$this->user) {
            abort(404, 'User không tồn tại');
        }
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }
    public function updateUser()
    {
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
        ]);

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        session()->flash('success', 'Cập nhật thành công!');
    }

    public function render()
    {
        return view('livewire.auth.profileuser');
    }
}


