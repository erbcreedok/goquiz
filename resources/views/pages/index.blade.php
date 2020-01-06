@extends('layouts.app')

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">
                Квизы в Алматы
            </h1>
            <p class="lead text-muted">
                Quiz - это барные викторины, прародителем которых является игра "Что? Где? Когда?" <br>
                Найдите квиз, забронируйте команду на нужный день и наслаждайтесь игрой!
            </p>
            <p>
                <a href="#" class="btn btn-secondary my-2">Узнать подробнее</a>
            </p>
        </div>
    </section>

    <div class="py-5 bg-light">
        <div class="container">
            @foreach(array_chunk($partners->all(), 3) as $partners_row)
                <div class="row mb-4">
                    @foreach($partners_row as $partner)
                        <div class="col-md-4">
                            <div class="card shadow-sm">
                                <img src="{{ $partner->logo }}" alt="{{ $partner->title }}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title text-center">
                                        {{ $partner->title }}
                                    </h5>
                                    <p class="card-text">
                                        {{ $partner->description }}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">2000тг</small>
                                        <small class="text-muted">{{ date('d.m.Y', strtotime('+3 days')) }}, 20:00</small>
                                        <a href="{{ route('quiz', $partner->slug) }}" class="btn btn-sm btn-outline-primary">Регистрация</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

@stop