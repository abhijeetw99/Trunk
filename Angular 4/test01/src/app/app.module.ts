import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

// import { AppRoutingModule } from './app-routing.module';
import { RouterModule, Routes } from '@angular/router';
import { AppComponent } from './app.component';
import { UserComponent } from './user/user.component';
import { RedColorDirective } from './red-color.directive';
import { DataService } from './Services/data.service';

const appRoutes: Routes = [
  { path: 'user-view', component: UserComponent }
];

@NgModule({
  declarations: [
    AppComponent,
    UserComponent,
    RedColorDirective
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(appRoutes)
  ],
  providers: [DataService],
  bootstrap: [AppComponent]
})
export class AppModule { }
