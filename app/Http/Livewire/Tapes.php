<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tape;

class Tapes extends Component
{
    public $tape_id, $tapes, $title, $content_main_page, $content, $author, $slug, $link_images_1, $link_images_2, $link_images_3, $link_images_4, $link_images_5, $content_access, $organization_show, $published, $published_slider_status;
    public $isOpen = 0;

    public function render()
    {
        //$this->tapes = Tape::all();
        $this->tapes = Tape::select('id', 'title', 'content', 'content_main_page')->get();
        return view('livewire.tapes');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->title = '';
        $this->content = '';
        $this->content_main_page = '';
        //$this->author = '';
        $this->slug = '';
        $this->link_images_1 = '';
        $this->link_images_2 = '';
        $this->link_images_3 = '';
        $this->link_images_4 = '';
        $this->link_images_5 = '';
        $this->content_access = '';
        $this->organization_show = '';
        $this->published = '';
        $this->published_slider_status = '';
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'content_main_page' => 'required',
            //'author' => 'required',
            'slug' => 'required',
            'link_images_1' => 'required',
            'link_images_2' => 'required',
            'link_images_3' => 'required',
            'link_images_4' => 'required',
            'link_images_5' => 'required',
            'content_access' => 'required',
            'organization_show' => 'required',
            'published' => 'required',
            'published_slider_status' => 'required',
        ]);

        try {
            Tape::updateOnCreate(['id' => $this->tape_id], [
                'title' => $this->title,
                'content' => $this->content,
                'content_main_page' => $this->content_main_page,
                //'author' => $this->author,
                'slug' => $this->slug,
                'link_images_1' => $this->link_images_1,
                'link_images_2' => $this->link_images_2,
                'link_images_3' => $this->link_images_3,
                'link_images_4' => $this->link_images_4,
                'link_images_5' => $this->link_images_5,
                'content_access' => $this->content_access,
                'organization_show' => $this->organization_show,
                'published' => $this->published,
                'published_slider_status' => $this->published_slider_status
            ]);

            session()->flash('message', $this->id ? 'Tape Update Successfully.' : 'Tape Created Successfully.');
            $this->closeModal();
            $this->resetInputFields();
        } catch (\Exception $ex) {
                session()->flash('error','Something goes wrong!!');
            }
    }

    public function edit($id)
    {
        $tape = Tape::findOrFail($id);
        $this->tape_id = $id;
        $this->title = $tape->title;
        $this->content = $tape->content;
        $this->content_main_page = $tape->content_main_page;
        //$this->author = $tape->author;
        $this->slug = $tape->slug;
        $this->link_images_1 = $tape->link_images_1;
        $this->link_images_2 = $tape->link_images_2;
        $this->link_images_3 = $tape->link_images_3;
        $this->link_images_4 = $tape->link_images_4;
        $this->link_images_5 = $tape->link_images_5;
        $this->content_access = $tape->content_access;
        $this->organization_show = $tape->organization_show;
        $this->published = $tape->published;
        $this->published_slider_status = $tape->published_slider_status;

        $this->openModal();
    }

    public function delete($id)
    {
        Tape::find($id)->delete();
        session()->flash('message', 'Tape Deleted Successfully.');
    }
}
