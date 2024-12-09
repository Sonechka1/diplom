
<div class="content">
    <p class="list-group-item list-group-item-action list-group-item-secondary " style="width: 40%">№ {{ $user->id }}</p>
    <p>{{ $user->name }}</p>
    <ul style="display: flex; flex-direction: column; gap: 10px">
                @if($user->role_id == 1)
                    <li><p>Должность: Администратор</p></li>
                @elseif($user->role_id == 2)
                    <li><p>Должность: Официант</p></li>
                @else
                    <li><p >Должность: Повар</p></li>
                @endif
                @if($user->status == 1)
                    <li><p>Статус: Работает</p></li>
                    <li>
                        <form method="post" action="{{ route('dismiss', $user->id) }}">
                            @csrf
                            <button class="btn btn-dark" type="submit">Уволить</button>
                        </form>
                    </li>
                @else
                        <p>Уволен</p>
                @endif
            </ul>

</div>

