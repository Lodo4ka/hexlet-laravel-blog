<h1>О блоге</h1>
<p>Эксперименты с Laravel на Хекслете</p>
<ul>
@foreach ($team as $member)
    <li>{{$member['name']}}</li>
@endforeach
</ul>