import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { PlanificationCoursComponent } from './planification-cours/planification-cours.component';
import { PlanificationSessionsComponent } from './planification-sessions/planification-sessions.component';



@NgModule({
  declarations: [
    PlanificationCoursComponent,
    PlanificationSessionsComponent,
  ],
  imports: [
    CommonModule
  ]
})
export class PlanificationModule { }
