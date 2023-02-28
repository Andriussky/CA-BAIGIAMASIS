<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonRequest;
use App\Managers\PersonsManager;
use App\Models\Person;

class PersonController extends Controller
{
    public function __construct(protected PersonsManager $manager)
    {
    }

    public function index()
    {
        $persons =  Person::query()->with(['user', 'address'])->get();

        return view('persons.index', compact('persons'));
    }

    public function create()
    {
        return view('persons.create');
    }

    public function store(PersonRequest $request)

    {



        $person = $this->manager->createPerson($request);
        return redirect()->route('persons.show', $person);
    }

    public function show(Person $person)
    {
        return view('persons.show', ['person' => $person]);
    }

    public function edit(Person $person)
    {
        return view('persons.edit', compact('person'));
    }

    public function update(PersonRequest $request, Person $person)
    {




        $person->update($request->all());
        return redirect()->route('persons.show', $person);
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('persons.index');
    }
}
