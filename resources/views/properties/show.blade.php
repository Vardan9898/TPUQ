<x-layout>
    <div class="row d-flex justify-content-center mt-5">
            <div class="col-md-3">
                <div class="card-sl">
                    <div class="card-image">
                        <img src="{{ asset('storage/' . $property->image) }}"  alt="image"/>
                    </div>

                    @if($property->mortgage_status == true)
                        <a class="card-action" href="#"><i class="fa fa-heart">Mortgaged</i></a>
                    @endif
                    <div class="card-heading">
                        <h3>
                            {{ $property->name }}
                        </h3>
                    </div>
                    <div class="card-heading">
                        <h5>
                            {{ $property->address }}
                        </h5>
                    </div>
                    <div class="card-text">
                        <p class="card-title">{{ $property->description }}</p>
                    </div>
                    <div class="card-text">
                        <p>${{ $property->price }}</p>
                    </div>
                    <a href="/properties/{{ $property->id }}/edit" class="card-button-edit">Edit or delete</a>
                </div>
                <a href="" class="card-button-make mb-5">Make tenancy for {{ $property->name }}</a>
            </div>
    </div>
</x-layout>


<style>

    body {
        font-family: Varela Round;
        background: #f1f1f1;
    }

    a {
        text-decoration: none;
    }

    /* Card Styles */

    .card-sl {
        border-radius: 8px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .card-image img {
        max-height: 100%;
        max-width: 100%;
        border-radius: 8px 8px 0px 0;
    }

    .card-action {
        position: relative;
        float: right;
        margin-top: -25px;
        margin-right: 20px;
        z-index: 2;
        color: #E26D5C;
        background: #fff;
        border-radius: 100%;
        padding: 15px;
        font-size: 15px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
    }

    .card-action:hover {
        color: #fff;
        background: #E26D5C;
        -webkit-animation: pulse 1.5s infinite;
    }

    .card-heading {
        font-size: 18px;
        font-weight: bold;
        background: #fff;
        padding: 10px 15px;
    }

    .card-text {
        padding: 10px 15px;
        background: #fff;
        font-size: 14px;
        color: #636262;
    }

    .card-button-make {
        display: flex;
        justify-content: center;
        padding: 10px 0;
        width: 100%;
        background-color: #068f00;
        color: #fff;
        border-radius: 0 0 8px 8px;
    }
    .card-button-edit {
        display: flex;
        justify-content: center;
        padding: 10px 0;
        width: 100%;
        background-color: #ffc400;
        color: #fff;
        border-radius: 0 0 8px 8px;
    }

    .card-button-delete {
        display: flex;
        justify-content: center;
        padding: 10px 0;
        width: 100%;
        background-color: #ca0600;
        color: #fff;
        border-radius: 0 0 8px 8px;
    }

    .card-button:hover {
        text-decoration: none;
        background-color: #1D3461;
        color: #fff;

    }


    @-webkit-keyframes pulse {
        0% {
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
        }

        70% {
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -webkit-transform: scale(1);
            transform: scale(1);
            box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
        }

        100% {
            -moz-transform: scale(0.9);
            -ms-transform: scale(0.9);
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
        }
    }
</style>