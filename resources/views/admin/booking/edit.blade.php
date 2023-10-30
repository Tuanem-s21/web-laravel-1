@extends('admin/master')

@section('title', '| staff - Create')

@section('content-main')

    <div class="wrapper">
        <div class="content-wrapper">
            <section class="container-fluid">
                <h1>booking Controller - Action Create</h1>
                <form action="{{ route('admin.booking.update', ['id' => $booking->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table>
                    <tr>
                        <td>staff</td>
                        <td>
                            <select name="staff_id" id="">
                                <option value="">Please choose staff</option>

                                @foreach ($staffs as $staff)
                                <option value="{{ $staff->id }}">{{ $staff->firstname }}{{ $staff->lastname}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Day booking</td>
                        <td><input type="date" name="date" value="{{ old('date') }}"></td>
                    </tr>

                    <tr>
                        <td>client</td>
                        <td>
                            <select name="client_id" id="">
                                <option value="">Please choose client</option>

                                @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->firstname }}{{ $client->lastname}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>service</td>
                        <td>
                            <select name="service_id" id="">
                                <option value="">Please choose service</option>

                                @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>Note</td>
                        <td><textarea name="note">{{ old('note') }}</textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Submit"></td>
                    </tr>
                    </table>
                </form>
            </section>
        </div>
    </div>

@endsection