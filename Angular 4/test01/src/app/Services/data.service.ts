import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class DataService {
  
  constructor( ) {
    console.log('Data Service constructor');
   }

   getUsers() {
      return [{name:'neo',rollno:22},
              {name:'Roger', rollno:33}];  
   }
}
