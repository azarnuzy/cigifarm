<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Acara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {

        $data = array(
            'title' => 'Acara',
            'isi' => 'acara/list'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }

    public function detail()
    {
        $content = "
    <p>
        Especially when you're certain about a new path in life and are unsure where to start learning about it.
    </p>
    <p>
        From the numerous experiences we've all had, there are often issues that make us doubt ourselves. Many questions arise, leaving us even more confused 🤔
    </p>
    <p>
        In a world filled with uncertainty, this event aims to invite you to seek new recommendations from our mentors to become a reference for your learning journey.
    </p>
    <p>
        So, to avoid confusion on how to begin, let's join this event with Dr. John Doe, Dr. Jane Smith, and Prof. Mark Johnson to find the answers.
    </p>
    <p>
        Don't miss this opportunity, mark the date!
    </p>
    <ul class='my-3'>
        <li>Date: Tuesday, October 3, 2023</li>
        <li>Time: 6:00 PM to 9:00 PM</li>
        <li>Location: City Hall Auditorium</li>
    </ul>
    <p>
        Free admission, just come and join us 😊
    </p>
    <p>
        See you there! 👋
    </p>";
        $data = array(
            'title' => 'Acara',
            'content' => $content,
            'isi' => 'acara/detail'
        );
        $this->load->view('layout/wrapper', $data, FALSE);
    }
}



?>