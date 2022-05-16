<div>
    <div class="banniere"></div>

    <div class="wrapper">

        <ul>
            @foreach ($categories as $category)

                <li>
                    <a href="#">
                        <img src="{{ asset('uploads/categories/'.$category->image) }}" alt="">
                        <h4>{{ $category->nom }}</h4>
                    </a>
                </li>

            @endforeach

        </ul>

    </div>
</div>




