import AppLayout from '@/Layouts/AppLayout';

export default function Dashboard() {
    return <div>Dashboard Page</div>;
}

Dashboard.layout = (page) => <AppLayout title="Dashboard">{page}</AppLayout>;
