<div class="top col-md-12">
    <div class="top-item-escape col-md-2 col-sm-12">
        <a href="/beheer">
            Dashboard
        </a>
    </div>
    <div class="top-item right col-md-1 ">
        @if (!Auth::guest())
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                Uitloggen
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endif
    </div>
    <div class="top-item right col-md-1 ">
        <a href="#">
            <span class="glyphicon glyphicon-user right" aria-hidden="true"></span>
        </a>
    </div>
</div>