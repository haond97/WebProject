<style>
    .rightbar-item {
        padding: 3px;
    }
</style>
<div class="card">
    <div class="card-body">
        <div class="list-group">
            @php ($first = true)
            @foreach ($friends as $friend)
                <a href="#" class="rightbar-item list-group-item list-group-item-action {!!($first ? ' active' : '')!!}">
                        {{$friend->User->fullname}}
                </a>
                @php ($first = false)
            @endforeach
        </div>
    </div>
</div>
