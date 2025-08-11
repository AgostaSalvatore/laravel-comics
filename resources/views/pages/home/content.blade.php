    @php
        $comics = config("comics");
    @endphp

    <div class="bg-dark text-white py-5">
        <div class="container position-relative">
            <div class="position-absolute" style="top: -80px; left: 0;">
                <div style="background-color: #0282f9; padding: 10px 20px; display: inline-block;">
                    <h4 class="text-white fw-bold m-0" style="font-family: Arial, sans-serif; letter-spacing: 1px;">CURRENT SERIES</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        @foreach ($comics as $comic)
                            <div class="col-2">
                                <x-card>
                                    <x-slot:title>{{$comic['title']}}</x-slot:title>
                                    <x-slot:thumb>{{$comic['thumb']}}</x-slot:thumb>
                                </x-card>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-primary">Load More</button>
            </div>
        </div>
    </div>