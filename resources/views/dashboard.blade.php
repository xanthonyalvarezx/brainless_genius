<x-dash>
    <header>
        <div class="mt-5 container ">
            <ul class="nav nav-tabs">
                <li class="nav-item ">
                    <a class="nav-link   {{ Request::segment(3) == 'new' ? 'active' : '' }}" aria-current="page"
                        href="/dashboard/messages/new">New Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(3) == 'read' ? 'active' : '' }}"
                        href="/dashboard/messages/read">Read Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::segment(3) == 'tasks' ? 'active' : '' }}"
                        href="/dashboard/messages/tasks" tabindex="-1" aria-disabled="true">Tasks</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="container container--narrow">
        @if (count($messages) < 1)
            <h3 class="text-center  mt-4">{{ $default }}</h3>
        @endif
        @if ($messages)
            @foreach ($messages as $message)
                <div
                    class="card shadow-lg roundness-lg d-flex flex-column justify-cntent-center align-items-center mb-2">
                    @if ($task)
                        <span class="text-danger text-center mb-3"> {{ $task }}</span>
                    @endif
                    <span>Message sent by - </span>
                    <span>Name: {{ $message->name }}</span>
                    <span>Email: {{ $message->email }}</span>
                    <hr />
                    <div>
                        <p>Message:</p>
                        <p>{{ $message->message }}</p>
                    </div>
                    <div class="d-flex w-100 justify-content-between px-5">
                        <form class="d-flex w-100 justify-content-between px-5"
                            action="/handle/message/submit/{{ $message->id }}" method="POST" x-data>
                            @method('PUT')
                            @csrf
                            <span>
                                <input type="checkbox" name="saved" value="saved" x-on:click="$el.form.submit()">
                                <label for="saved">Save Message</label>
                            </span>

                            <span>
                                <input type="checkbox" name="job" value="job" x-on:click="$el.form.submit()">
                                <label for="job">Potential Job</label>
                            </span>

                            <span>
                                <input type="checkbox" name="reply" value="reply" x-on:click="$el.form.submit()">
                                <label for="reply">Reply to Message</label>
                            </span>
                        </form>
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
        {{ $messages->links() }}
    </div>
</x-dash>
