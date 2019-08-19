import { Component, OnInit } from '@angular/core';
import { DataService } from '../Services/data.service';

@Component({
  selector: 'app-user',
  templateUrl: './user.component.html',
  styleUrls: ['./user.component.css']
})
export class UserComponent implements OnInit {

  name:string;
  animes:string[];
  button:string;

  constructor( private dataService:DataService ) { 
    console.log('user component constructor');
  }

  ngOnInit() {
    this.name = 'neo';
    this.animes = ['OPM', 'SAO'];
    this.button = "Not Clicked";
  }

  onClick() {
    this.button = 'Clicked Now';
  }

}
