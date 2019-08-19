import { Directive, ElementRef } from '@angular/core';

@Directive({
  selector: '[appRedColor]'
})
export class RedColorDirective {

  constructor(element:ElementRef) { 
    element.nativeElement.style.color = "Red";
  }
      
}
