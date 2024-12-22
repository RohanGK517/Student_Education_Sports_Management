#include <stdio.h> 
#include <conio.h> 
void main()
{
int a[5],i,n,item,ub,lb,mid; clrscr();
printf("\nEnter the size\n"); scanf("%d",&n);
printf("\nEnter arrary elements\n");
for(i=0;i<n;i++) scanf("%d",&a[i]);
printf("\nEnter the item to be searched "); scanf("%d",&item);
lb=0; ub=n-1;
while(lb<=ub)
{
mid=(lb+ub)/2; if(item==a[mid])
{
found=1; loc=mid; break;
}
if(item<a[mid])
ub=mid-1;
else
lb=mid+1;
}
if(found)
printf("%d found at %d loc\n",item,i+1);
else
printf("\nUnsuccessful search"); getch();
}
