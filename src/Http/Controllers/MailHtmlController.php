<?php

namespace Laravel\Telescope\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Telescope\Contracts\EntriesRepository;

class MailHtmlController extends Controller
{
    /**
     * Get the HTML content of the given email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Laravel\Telescope\Contracts\EntriesRepository  $storage
     * @param  int  $id
     * @return mixed
     */
    public function show(Request $request, EntriesRepository $storage, $id)
    {
        return $storage->find($id)->content['html'];
    }
}
