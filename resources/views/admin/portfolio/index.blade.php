@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="float:right">
                <div class="ui segment">
                    <div class="ui two column very relaxed grid">
                        {{-- form --}}
                        <div class="column">
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="field">
                                        <label>College</label>
                                        <input type="text" placeholder="name of college" name="title">
                                    </div>
                                    <div class="field">
                                        <label>Level</label>
                                        <input type="text" placeholder="level" name="level">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Faculty</label>
                                    <input type="text" placeholder="faculty" name="faculty">
                                </div>
                                <div class="two fields">
                                    <div class="field">
                                        <label>Started Year</label>
                                        <input type="text" placeholder="started year" >
                                    </div>
                                    <div class="field">
                                        <label>End Year</label>
                                        <input type="text" placeholder="end year">
                                    </div>
                                </div>
                                <div class="two fields">
                                    <div class="field">
                                        <label>Division</label>
                                        <input type="text" placeholder="division" >
                                    </div>
                                    <div class="field">
                                        <div class="ui toggle checkbox">
                                            <input type="checkbox" name="status">
                                            <label>Status</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- index --}}
                        <div class="column">
                            <table class="ui teal table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nihareeka College</td>
                                        <td>Bachelor</td>
                                    </tr>
                                    <tr>
                                        <td>Nihareeka College</td>
                                        <td>Bachelor</td>
                                    </tr>
                                    <tr>
                                        <td>Nihareeka College</td>
                                        <td>Bachelor</td>
                                    </tr>
                                    <tr>
                                        <td>Nihareeka College</td>
                                        <td>Bachelor</td>
                                    </tr>
                                    <tr>
                                        <td>Nihareeka College</td>
                                        <td>Bachelor</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="ui vertical divider">
                        AND
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection