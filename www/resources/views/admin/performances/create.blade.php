@extends('main')

@section('content')
    <h1>Создать выступление</h1>
    <a href="{{route('performances.index')}}">Назад</a>
    <form action="{{route('performances.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Название">
        <input type="file" name="picture">
        <input type="number" name="cost" placeholder="Цена">
        <input type="number" name="age_limit" placeholder="Возрастной ценз">
        <div class="checkselect">
            @foreach($genres as $genre)
                <label><input type="checkbox" name="checkbox[{{$genre->id}}]" value="{{$genre->id}}">{{$genre->name}}</label>
            @endforeach
        </div>
        <input type="date" name="date">
        <input type="submit">
    </form>
@endsection
@section('js')
    <script>
        (function($) {
            function setChecked(target) {
                var checked = $(target).find("input[type='checkbox']:checked").length;
                if (checked) {
                    $(target).find('select option:first').html('Выбрано: ' + checked);
                } else {
                    $(target).find('select option:first').html('Выберите из списка');
                }
            }

            $.fn.checkselect = function() {
                this.wrapInner('<div class="checkselect-popup"></div>');
                this.prepend(
                    '<div class="checkselect-control">' +
                    '<select class="form-control"><option></option></select>' +
                    '<div class="checkselect-over"></div>' +
                    '</div>'
                );

                this.each(function(){
                    setChecked(this);
                });
                this.find('input[type="checkbox"]').click(function(){
                    setChecked($(this).parents('.checkselect'));
                });

                this.parent().find('.checkselect-control').on('click', function(){
                    $popup = $(this).next();
                    $('.checkselect-popup').not($popup).css('display', 'none');
                    if ($popup.is(':hidden')) {
                        $popup.css('display', 'block');
                        $(this).find('select').focus();
                    } else {
                        $popup.css('display', 'none');
                    }
                });

                $('html, body').on('click', function(e){
                    if ($(e.target).closest('.checkselect').length == 0){
                        $('.checkselect-popup').css('display', 'none');
                    }
                });
            };
        })(jQuery);

        $('.checkselect').checkselect();

    </script>
@endsection
