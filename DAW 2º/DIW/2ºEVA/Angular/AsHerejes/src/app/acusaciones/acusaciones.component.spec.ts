import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AcusacionesComponent } from './acusaciones.component';

describe('AcusacionesComponent', () => {
  let component: AcusacionesComponent;
  let fixture: ComponentFixture<AcusacionesComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [AcusacionesComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(AcusacionesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
