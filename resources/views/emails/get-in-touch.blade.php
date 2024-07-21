@extends('emails.layout')
@section('body')
<tr>
    <td class="body" style="padding: 40px; text-align: left; font-size: 16px; line-height: 1.6;">
        Hello <br>
        You have received a new message from a user through the contact us from website.
        <br>
        <br>
        Name: {{$data['fullname']}}
        <br>
        Email: {{$data['email']}}
        <br>
        Message: {{$data['message']}}
    </td>
</tr>

<tr>
    <td class="body" style="padding: 40px; text-align: left; font-size: 16px; line-height: 1.6;">
        You can reply this email by clicking reply to all.
    </td>
</tr>
@endsection