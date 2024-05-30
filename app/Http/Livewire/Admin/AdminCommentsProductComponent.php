<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comment;
use Livewire\Component;

class AdminCommentsProductComponent extends Component {
    public $product_id;
    public $comment_id;
    public function mount($product_id) {
        $this->product_id = $product_id;
    }

    public function deleteComment() {
        $comment = Comment::find($this->comment_id);
        $comment->delete();
        session()->flash('message', 'Comment deleted successfully!');
    }

    public function blockComment() {
        $comment = Comment::find($this->comment_id);
        // dd($comment->blocked);
        if ($comment->blocked === 0) {
            $comment->blocked = 1;
            session()->flash('message', 'Comment blocked successfully!');
        } else {
            $comment->blocked = 0;
            session()->flash('message', 'Comment unblocked successfully!');
        }
        $comment->save();
    }
    public function render() {

        $comments = Comment::where('product_id', $this->product_id)->paginate(6);
        return view('livewire.admin.admin-comments-product-component', ['comments' => $comments])->layout('livewire.layouts.admin');
    }
}
