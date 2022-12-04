@extends('layout.main')

@section('content')
    <x-breadcrumb
        :values="[__('menu.transaction.menu'), 'XII/SEP/09/XII/HAHA', __('menu.transaction.disposition_letter'), __('menu.general.create')]">
    </x-breadcrumb>

    <div class="alert alert-primary alert-dismissible" role="alert">
        {{ __('model.disposition.notice_me', ['reference_number' => 'XII/SEP/09/XII/HAHA']) }} <a href="{{ route('transaction.incoming.show', 1) }}" class="fw-bold">{{ __('menu.general.view') }}</a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="card mb-4">
        <form action="{{ route('transaction.disposition.store', 1) }}" method="POST">
            @csrf
            <div class="card-body row">
                <div class="col-sm-12 col-12 col-md-6 col-lg-6">
                    <x-input-form name="to" :label="__('model.disposition.to')"/>
                </div>
                <div class="col-sm-12 col-12 col-md-6 col-lg-6">
                    <x-input-form name="due_date" :label="__('model.disposition.due_date')" type="date"/>
                </div>
                <div class="col-sm-12 col-12 col-md-12 col-lg-12">
                    <x-input-textarea-form name="content" :label="__('model.disposition.content')"/>
                </div>
                <div class="col-sm-12 col-12 col-md-6 col-lg-4">
                    <div class="mb-3">
                        <label for="status" class="form-label">{{ __('model.disposition.status') }}</label>
                        <select class="form-select" id="status" name="status">
                            <option value="Rahasia" selected="">Rahasia</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 col-12 col-md-6 col-lg-8">
                    <x-input-form name="note" :label="__('model.disposition.note')"/>
                </div>
            </div>
            <div class="card-footer pt-0">
                <button class="btn btn-primary" type="submit">{{ __('menu.general.save') }}</button>
            </div>
        </form>
    </div>
@endsection
