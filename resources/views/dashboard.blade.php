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
                <div
                    class="card shadow-lg roundness-lg d-flex flex-column justify-cntent-center align-items-center mb-2">
                    <span>Message sent by - </span>
                    <span>Name: {{ $message->name }}</span>
                    <span>Email: {{ $message->email }}</span>
                    <hr />
                    <div>
                        <p>Message:</p>
                        <p>{{ $message->message }}</p>
                    </div>
                    <div class="d-flex w-100 justify-content-between px-5">
                        <span>
                            <input type="checkbox" name="save" />
                            <label for="save"> Save Message</label>
                        </span>
                        <span>
                            <input type="checkbox" name="job" />
                            <label for="job">Potential Job</label>
                        </span>
                        <span>
                            <input type="checkbox" name="reply" />
                            <label for="reply">Reply to Message</label>
                        </span>
                        <form action="/delete/message/{{ $message->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border border-0 bg-transparent"><img
                                    src={{ asset('images/delete.svg') }} alt="trash can icon" width="25px"></button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</x-dash>
