@extends('layouts.master')
@section('page_title', 'Information des élèves de - '.$my_class->name)
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Liste des élèves</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-students" class="nav-link active" data-toggle="tab">Tous les élèves de la {{ optional($my_class)->name }}</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Sections</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach($sections as $s)
                            <a href="#s{{ optional($s)->id }}" class="dropdown-item" data-toggle="tab">{{ optional($my_class)->name.' '.optional($s)->name }}</a>
                        @endforeach
                    </div>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-students">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Photo</th>
                            <th>Nom et Prénoms</th>
                            <th>Matricule</th>
                            <th>Section</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $s)
                        @if(optional($s->user)->id)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if(optional($s->user)->photo)
                                        <img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ optional($s->user)->photo }}" alt="photo">
                                    @endif
                                </td>
                                <td>{{ optional($s->user)->name }}</td>
                                <td>{{ optional($s)->adm_no }}</td>
                                <td>{{ optional(optional($my_class)->name.' '.optional($s->section)->name)->value }}</td>
                                <td>{{ optional($s->user)->email }}</td>
                                <td class="text-center">
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-left">
                                                <a href="{{ route('students.show', Qs::hash(optional($s)->id)) }}" class="dropdown-item"><i class="icon-eye"></i>Voir le profile</a>
                                                @if(Qs::userIsTeamSA())
                                                    <a href="{{ route('students.edit', Qs::hash(optional($s)->id)) }}" class="dropdown-item"><i class="icon-pencil"></i> Modifier</a>
                                                    <a href="{{ route('st.reset_pass', Qs::hash(optional($s->user)->id)) }}" class="dropdown-item"><i class="icon-lock"></i> Réinitialiser le mot de passe</a>
                                                @endif
                                                <a target="_blank" href="{{ route('marks.year_selector', Qs::hash(optional($s->user)->id)) }}" class="dropdown-item"><i class="icon-check"></i> Bulletins</a>

                                                {{--Delete--}}
                                                @if(Qs::userIsSuperAdmin())
                                                    <a id="{{ Qs::hash(optional($s->user)->id) }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Supprimer</a>
                                                    <form method="post" id="item-delete-{{ Qs::hash(optional($s->user)->id) }}" action="{{ route('students.destroy', Qs::hash(optional($s->user)->id)) }}" class="hidden">@csrf @method('delete')</form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>

                @foreach($sections as $se)
                    <div class="tab-pane fade" id="s{{ optional($se)->id }}">
                        <table class="table datatable-button-html5-columns">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>ADM_No</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students->where('section_id', optional($se)->id) as $sr)
                              @if(optional($sr->user)->id)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if(optional($sr->user)->photo)
                                            <img class="rounded-circle" style="height: 40px; width: 40px;" src="{{ optional($sr->user)->photo }}" alt="photo">
                                        @endif
                                    </td>
                                    <td>{{ optional($sr->user)->name }}</td>
                                    <td>{{ optional($sr)->adm_no }}</td>
                                    <td>{{ optional($sr->user)->email }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="{{ route('students.show', Qs::hash(optional($sr)->id)) }}" class="dropdown-item"><i class="icon-eye"></i> View Info</a>
                                                    @if(Qs::userIsTeamSA())
                                                        <a href="{{ route('students.edit', Qs::hash(optional($sr)->id)) }}" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                                        <a href="{{ route('st.reset_pass', Qs::hash(optional($sr->user)->id)) }}" class="dropdown-item"><i class="icon-lock"></i> Reset password</a>
                                                    @endif
                                                    <a href="#" class="dropdown-item"><i class="icon-check"></i> Bulletin</a>

                                                    {{--Delete--}}
                                                    @if(Qs::userIsSuperAdmin())
                                                        <a id="{{ Qs::hash(optional($sr->user)->id) }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                                        <form method="post" id="item-delete-{{ Qs::hash(optional($sr->user)->id) }}" action="{{ route('students.destroy', Qs::hash(optional($sr->user)->id)) }}" class="hidden">@csrf @method('delete')</form>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    {{--Student List Ends--}}

@endsection
