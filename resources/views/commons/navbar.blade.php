<header class=" mb-4">
    <nav class="navbar bg-neutral text-neutral-content"> {{-- Link to top page --}} 
        <div class=" flex-1 ">
            <h1> <a class="btn btn-ghost normal-case text-xl" href="{{ route("index")}}"> MessageBoard </a> </h1>
            </div>
            <div class="flex-none">
                <ul tabindex="0" class="menu lg:block lg:menu-horizontal">
                    {{-- Link to message creation page --}} <li>
                        <a class="link link-hover" href=" {{ route('messages.create')}} ">Post a new message </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>