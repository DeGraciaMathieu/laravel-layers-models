# Laravel Layers Models

Proposal 1 (the one implemented in the repo) : we keep the domain pure, with no knowledge of Eloquent or Eloquent Collections :

<img width="1024" height="610" alt="image" src="https://github.com/user-attachments/assets/e76de433-62ad-49af-a9c0-50e38ff4390a" />

Proposal 2: Eloquent is still isolated, but the domain layer is aware of the collections :

<img width="937" height="603" alt="image" src="https://github.com/user-attachments/assets/c36977d4-fc57-464c-9d21-1684d2ed7e1d" />
