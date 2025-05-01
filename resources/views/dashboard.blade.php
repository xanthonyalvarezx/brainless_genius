<x-dash>
    <header>
        <div class="mt-5 container ">

            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">New Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Read Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Tasks</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="container container--narrow">
        @if ($messages)
            @foreach ($messages as $message)
                <div class="card shadow-lg roundness-lg d-flex flex-column justify-cntent-center align-items-center">
                    <span>Message sent by - </span>
                    <span>Name: {{$message->name}}</span>
                    <span>Email: {{$message->email}}</span>
                    <hr />
                    <div>
                        <p>Message:</p>
                        <p>{{ $message->message }}</p>
                    </div>
                    <div>
                        <input type="checkbox" name="save" />
                        <label for="save"> Save Message</label>
                        <input type="checkbox" name="job" />
                        <label for="job">Potential Job</label>
                        <input type="checkbox" name="reply" />
                        <label for="reply">Reply to Message</label>
                        <a href="/delete/message/{{ $message->id }}"><img x-onclick="" src={{ asset('images/icons8-trash.svg') }}
                                alt="trash can icon" width="25px"></a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</x-dash>