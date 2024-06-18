<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kalkulator') }}
        </h2>
    </x-slot>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Simple Calculator</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (isset($result))
                            <div class="alert alert-success">
                                <h4>Hasil: {{ $result }}</h4>
                            </div>
                        @endif
                        <form action="/calculator/hitung" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="number1">Angka:</label>
                                <input type="text" id="number1" name="number1" class="form-control" value="{{ old('number1') }}">
                            </div>
                            <div class="form-group">
                                <label for="number2">Angka:</label>
                                <input type="text" id="number2" name="number2" class="form-control" value="{{ old('number2') }}">
                            </div>
                            <div class="form-group">
                                <label for="operation">Operasi:</label>
                                <select id="operation" name="operation" class="form-control">
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="*">*</option>
                                    <option value="/">/</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Hitung</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-app-layout>
