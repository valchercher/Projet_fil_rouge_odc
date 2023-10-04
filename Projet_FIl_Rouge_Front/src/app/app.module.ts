import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { PlanificationModule } from './planification/planification.module';
import { PlanificationComponent } from './planification/planification.component';

@NgModule({
  declarations: [
    AppComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    PlanificationModule
  ],
  providers: [ ],
  bootstrap: [AppComponent]
})
export class AppModule { }
