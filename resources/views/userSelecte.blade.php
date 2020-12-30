@if (!session('step2'))
    <form action="{{route('getCompanies')}}" method="POST" class="p-4">
             @csrf
             <h3>Step One Select Specialty</h3>
             <label for="">Specialty</label>
            <select  name="specialty"  class="form-control mb-3">
                @if (count($specialties))



                      @foreach ($specialties as $s)

                                  <option value="{{$s->id}}">{{$s->name}}</option>

                      @endforeach

                @endif

            </select>


            <button class="btn btn-info btn-lg d-block mt-3">Search</button>
 </form>

@endif

            @if (session('step2'))



              <table class="table table-hover table-bordered ">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Specialty</th>
                          <th>Email</th>
                          <th>Message</th>
                      </tr>
                  </thead>
                  <tbody>
                     @foreach (session('step2') as $cs)
                               <tr>
                                    <td>{{$cs->company->name}}</td>
                                    <td>{{$cs->specialty->name}}</td>
                                    <td><a href="mailto:{{$cs->company->email}}">{{$cs->company->email}}</a></td>
                                    <td>{{$cs->company->msg}}</td>
                                </tr>
                     @endforeach

                  </tbody>
              </table>

            @endif
