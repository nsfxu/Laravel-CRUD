<nav class="navbar navbar-expand-sm bg-black">
    <ul class="navbar-nav">


        <li class="nav-item">
            <a class="nav-link" href="{{ route('disciplines.index')}}">Disciplinas</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('classrooms.index')}}">Classes</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('students.index')}}">Alunos</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('teachers.index')}}">Professores</a>
        </li>

        @include(Auth::check() ? 'inc/logged' : 'inc/unlogged')        

    </ul>
</nav>