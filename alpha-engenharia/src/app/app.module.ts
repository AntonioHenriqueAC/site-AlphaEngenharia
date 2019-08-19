import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { FooterComponent } from './components/footer/footer.component';
import { TopcarouselComponent } from './components/topcarousel/topcarousel.component';
import { TestimonialsComponent } from './components/testimonials/testimonials.component';
import { ProjectsComponent } from './components/projects/projects.component';
import { CompanyComponent } from './components/company/company.component';
import { DreamsComponent } from './components/dreams/dreams.component';
import { FaqComponent } from './components/faq/faq.component';
import { ContactComponent } from './components/contact/contact.component';

const appRoutes: Routes = [
  {
    path: 'navbar',
    component: NavbarComponent
  }
];

@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    FooterComponent,
    TopcarouselComponent,
    TestimonialsComponent,
    ProjectsComponent,
    CompanyComponent,
    DreamsComponent,
    FaqComponent,
    ContactComponent
  ],
  imports: [BrowserModule, RouterModule.forRoot(appRoutes)],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule {}
