import { Injectable } from '@angular/core';
import { HttpClientModule }    from '@angular/common/http';
import 'rxjs/add/operator/map';


@Injectable({
  providedIn: 'root'
})
export class DataService {



  constructor( private http:HttpClientModule ) {
    console.log('Data Service constructor');
   }

   getPosts() {
      return this.http.get( 'https://jsonplaceholder.typicode.com/posts' ).map( res => res.json() );
      
   }
}
