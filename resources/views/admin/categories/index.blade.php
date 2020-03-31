@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="float:right">
            <div class="ui grid">
                {{-- categories form --}}
                <div class="eight wide column">
                    <div class="ui form">
                        <div class="three fields">
                          <div class="field">
                            <label>First name</label>
                            <input type="text" placeholder="First Name">
                          </div>
                          <div class="field">
                            <label>Middle name</label>
                            <input type="text" placeholder="Middle Name">
                          </div>
                          <div class="field">
                            <label>Last name</label>
                            <input type="text" placeholder="Last Name">
                          </div>
                        </div>
                      </div>
                </div>

                {{-- categories index --}}
                <div class="eight wide column">
                    <table class="ui teal table">
                        <thead>
                          <tr><th>Food</th>
                          <th>Calories</th>
                          <th>Protein</th>
                        </tr></thead><tbody>
                          <tr>
                            <td>Apples</td>
                            <td>200</td>
                            <td>0g</td>
                          </tr>
                          <tr>
                            <td>Orange</td>
                            <td>310</td>
                            <td>0g</td>
                          </tr>
                        </tbody>
                      </table>
                </div>


            </div>
        </div>
    </div>
</div>

@endsection